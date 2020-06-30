<?php $__env->startSection('content_admin'); ?>

<h3>Pendaftaran Admin</h3>

<form action="/register-admin/store" method="post">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="role" value="admin">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    : <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    : <input type="email" name="email">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    : <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Register">
                </td>
            </tr>
        </table>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/admin/register_admin.blade.php ENDPATH**/ ?>