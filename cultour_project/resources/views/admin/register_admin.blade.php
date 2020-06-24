@extends('admin/index_admin')
@section('content_admin')

<h3>Pendaftaran Admin</h3>

<form action="/register-admin/store" method="post">
        {{csrf_field()}}
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

@endsection