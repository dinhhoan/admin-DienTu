<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm Quản Trị</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Tên Đăng Nhập </label>
                <input type="text" name="username" class="form-control" placeholder="Nhập Tên">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Nhập Email">
            </div>
            <div class="form-group">
                <label>Mật Khẩu</label>
                <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
            </div>
            <div class="form-group">
                <label>Nhập Lại Mật Khẩu</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Nhập lại mật khẩu">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Lưu</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Thông Tin Quản Trị 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Thêm Quản Trị Viên 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Tên Đăng Nhập </th>
            <th>Email </th>
            <th>Mật Khẩu</th>
            <th>Sửa </th>
            <th>Xóa </th>
          </tr>
        </thead>
        <tbody>
     
          <tr>  
            <td> 1 </td>
            <td> Tran Dinh Hoan</td>
            <td> tdhoan@gmail.com.com</td>
            <td> ****** </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> Sửa</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> Xóa</button>
                </form>
            </td>
          </tr>
          <tr>  
            <td> 2 </td>
            <td> Tran Dinh Hoan</td>
            <td> tdhoan@gmail.com.com</td>
            <td> ****** </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> Sửa</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> Xóa</button>
                </form>
            </td>
          </tr>
          <tr>  
            <td> 3 </td>
            <td> Tran Dinh Hoan</td>
            <td> tdhoan@gmail.com.com</td>
            <td> ****** </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> Sửa </button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> Xóa</button>
                </form>
            </td>
          </tr>
          <tr>  
            <td> 4 </td>
            <td> Tran Dinh Hoan</td>
            <td> tdhoan@gmail.com.com</td>
            <td> ****** </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> Sửa</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> Xóa</button>
                </form>
            </td>
          </tr>
          <tr>  
            <td> 5 </td>
            <td> Tran Dinh Hoan</td>
            <td> tdhoan@gmail.com.com</td>
            <td> ****** </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> Sửa</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> Xóa</button>
                </form>
            </td>
          </tr>
          <tr>  
            <td> 6 </td>
            <td> Tran Dinh Hoan</td>
            <td> tdhoan@gmail.com.com</td>
            <td> ****** </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> Sửa</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> Xóa</button>
                </form>
            </td>
          </tr>
          <tr>  
            <td> 7 </td>
            <td> Tran Dinh Hoan</td>
            <td> tdhoan@gmail.com.com</td>
            <td> ****** </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> Sửa</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> Xóa</button>
                </form>
            </td>
          </tr>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>