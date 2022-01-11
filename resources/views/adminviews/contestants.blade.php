@extends('layouts.adminauth')

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <style>
        table *{
            color: black;
        }
        html, body {
            width: 100%;
            overflow: scroll;
        }

        {
            overflow: auto;
        }

        #table-cover{
            overflow: auto;
        }
    </style>
    <!-- ############ Main START-->
    <div>
        <div class="page-content page-container" id="page-content">
            <div class="padding sr">
                <div class="page-hero" data-id="1" data-source="./assets/aleyi.mp3">

                    <div class="pos-rlt text-white">
                        <h3 class=" font-weight-bold mb-0 text-white title">Admin Dashboard</h3>


                    </div>
                </div>
                <div class="d-md-flex pos-rlt">
                    <div class="flex">

                        <div class="col-12" id="table-cover" data-id="89"  data-source="http://bepop.test/assets/aleyi.mp3">
                            <table id="myTable" style="overflow: auto" class="display">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>DOB</th>
                                    <th>Gender</th>
                                    <th>Contact</th>
                                    <th>IG_Handle</th>
                                    <th>Joined On</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1 ?>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->date_of_birth }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>{{ $user->contact_number }}</td>
                                    <td>{{ $user->instagram_handle }}</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>                         </div>






                    </div>
                    <div style="min-width: 4rem"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- ############ Main END-->




@endsection
@push('custom-script')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endpush
