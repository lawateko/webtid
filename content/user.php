<?php
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require_once 'config/koneksi.php';
$user = query("SELECT * FROM user");

?>

<div class="dosen-container container mt-3">
    <div class="row g-4">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="card shadow-sm p-3">
                <form action="index.php?page=user_save" method="POST">
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Nama pengguna</label>
                        <input type="text" name="nama_pengguna" class="form-control border-3 p-2" id="#" required>
                    </div>
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Email</label>
                        <input type="email" name="email" class="form-control border-3 p-2" id="#" required>
                    </div>
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Password</label>
                        <input type="password" name="password" class="form-control border-3 p-2" id="#" required>
                    </div>
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Role</label>
                        <select name="role" id="" class="form-control border-3 p-2">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100">Kirim</button>
                </form>
            </div>
        </div>

        <div class="col-lg-8 col-md-7 col-sm-12">
            <div class="card fs-4 fw-bold card-header mb-1">DATA PENGGUNA</div>
            <div class="card shadow-sm p-3">
                <div class="table-responsive table-dosen">
                    <table class="table table-striped table-hover fs-5">
                        <thead class="table-dark sticky-top">
                            <tr>
                                <th scope="col">Nama Pengguna</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach ($user as $row): ?>
                                <tr>
                                    <td><?php echo $row['nama_pengguna']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['role']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>