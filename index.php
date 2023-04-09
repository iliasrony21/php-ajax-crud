<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
   <div class="container">
    <div class="row mt-5 ">
        <div class="col-md-4  pt-3 border border-info rounded ">
            <div class="message">
               
            </div>
           <div class="form-control mt-3">
            <label for="name">Name</label>
            <input type="text" class="name form-control" >
           </div>
           <div class="form-control mt-3">
            <label for="email">email</label>
            <input type="text" class="email form-control">
           </div>
           <div class="form-control mt-3">
            <label for="phone">phone</label>
            <input type="text" class="phone form-control">
           </div>
           <div class="form-control mt-3">
            <label for="status">status</label>
            <select name="status" class="status form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
           </div>
           <button class="save btn btn-info form-control my-3 ">Save info</button>
           <button style="display:none;" class="update btn btn-warning form-control my-3 ">Update info</button>
        </div>

        <!-- table part start  -->
        <div class="col-md-8">
         <table class="table">
            <thead>
                <tr>
                <th scope="col">SL</th>
                <th scope="col">name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody class="t_data">
             
               
            </tbody>
        </table>   
        </div>
    </div>
   </div>

   <!-- table part end  -->


<!-- deleteModal -->
<div class="modal fade" id="deleteItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure to Delete this item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary  " data-bs-dismiss="modal">No</button>
        <button type="button" class="btn  btn_yes btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div>








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="jQuery3.6.3.js"></script>
<script src="ajax.js"></script>
</body>
</html>