<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bs5/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <title>Tambah</title>
  </head>
  <body>
    <br>
    <br>
    <br>
    <br>
    <br>
                <div class="container">

           <div class="col-sm-14">
            
              

           <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama Anda" >
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Gender</label>
            <input type="text" class="form-control" id="Gender" placeholder="Gender Anda" >
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Rating</label>
            <input type="text" class="form-control" id="Rating" placeholder="Rating" >
          </div>
          <br>
          <div class="form-group">
          <a href="#" class="btn btn-primary">Submit</a>
          <a href="home.html" class="btn btn-primary">Back</a>
           </div>
           <?php foreach ($products as $product): ?>
                  <tr>
                    <td width="150">
                      <?php echo $product->NamaTask ?>
                    </td>
                    <td>
                      <?php echo $product->NamaPelajaran?>
                    </td>
                    <td class="small">
                      <?php echo substr($product->description, 0, 120) ?>...</td>
                    <td width="250">
                      <a href="<?php echo site_url('view'.$Task->Task_id) ?>" 
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                      <a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
                       href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
         </div>
         </div>
        

