@include('header')
            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div>
                    <h2>Data Table</h2>
                    <table border="2" width=100% class="text-light">
                        <tr class="head">
                            <td>ID</td>
                            <td>Username</td>
                            <td>Email</td>
                            <td>PassWord</td>
                            <td>Comfirm PassWord</td>
                            <td>Role</td>
                            <td>Edit</td>
                            <td>Delete</td>


                        </tr>
                        @foreach ($data as $in)
                            <tr class="head1">
                                <td>{{ $in['id'] }}</td>
                                <td>{{ $in['username'] }}</td>
                                <td>{{ $in['email'] }}</td>
                                <td>{{ $in['password'] }}</td>
                                <td>{{ $in['cpassword'] }}</td>
                                <td>{{ $in['role'] }}</td>
                                <td><button><a href="{{url('admin/'.$in['id'].'/edit')}}">Edit</a></button></td>
                                <form method="POST" action="{{url('admin/'.$in['id'])}}">
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit">Delete</button></td>
                                </form>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <!-- Widgets End -->
@include('footer')