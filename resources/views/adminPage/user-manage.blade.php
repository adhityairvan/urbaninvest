@extends('adminPage.master')

@section('title')
    User Management
    @endsection

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{URL::asset('adminpage/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    @endsection

@section('body-title')
    Account Management
    @endsection
@section('body-subtitle')
    User Account Management
    @endsection
@section('body')
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Registered User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>100</h3>

                        <p>Investing User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3>100</h3>

                        <p>Investing User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>20</h3>

                        <p>Online User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-chatbubble"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User</h3>
            </div>
            <div class="box-body">
                <table id="user" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Last Login</th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>User1</td>
                        <td>User1@user.com</td>
                        <td>20/10/2016</td>
                        <td><a href="#"><button class="btn bg-blue">Profile</button></a>
                            <a href="#"><button class="btn bg-yellow">Edit</button></a>
                            <a href="#"><button class="btn bg-red">Delete</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>User1</td>
                        <td>User1@user.com</td>
                        <td>20/10/2016</td>
                        <td><a href="#"><button class="btn bg-blue">Profile</button></a>
                            <a href="#"><button class="btn bg-yellow">Edit</button></a>
                            <a href="#"><button class="btn bg-red">Delete</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>User1</td>
                        <td>User1@user.com</td>
                        <td>20/10/2016</td>
                        <td><a href="#"><button class="btn bg-blue">Profile</button></a>
                            <a href="#"><button class="btn bg-yellow">Edit</button></a>
                            <a href="#"><button class="btn bg-red">Delete</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>User1</td>
                        <td>User1@user.com</td>
                        <td>20/10/2016</td>
                        <td><a href="#"><button class="btn bg-blue">Profile</button></a>
                            <a href="#"><button class="btn bg-yellow">Edit</button></a>
                            <a href="#"><button class="btn bg-red">Delete</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>User1</td>
                        <td>User1@user.com</td>
                        <td>20/10/2016</td>
                        <td><a href="#"><button class="btn bg-blue">Profile</button></a>
                            <a href="#"><button class="btn bg-yellow">Edit</button></a>
                            <a href="#"><button class="btn bg-red">Delete</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>User1</td>
                        <td>User1@user.com</td>
                        <td>20/10/2016</td>
                        <td><a href="#"><button class="btn bg-blue">Profile</button></a>
                            <a href="#"><button class="btn bg-yellow">Edit</button></a>
                            <a href="#"><button class="btn bg-red">Delete</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>User1</td>
                        <td>User1@user.com</td>
                        <td>20/10/2016</td>
                        <td><a href="#"><button class="btn bg-blue">Profile</button></a>
                            <a href="#"><button class="btn bg-yellow">Edit</button></a>
                            <a href="#"><button class="btn bg-red">Delete</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>User1</td>
                        <td>User1@user.com</td>
                        <td>20/10/2016</td>
                        <td><a href="#"><button class="btn bg-blue">Profile</button></a>
                            <a href="#"><button class="btn bg-yellow">Edit</button></a>
                            <a href="#"><button class="btn bg-red">Delete</button></a>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Last Login</th>
                        <th>Manage</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
    @endsection
@section('script')
    <script src="{{URL::asset('adminpage/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('adminpage/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('#user').DataTable()
        })
    </script>
    @endsection