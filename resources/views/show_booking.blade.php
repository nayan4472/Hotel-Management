@include('header')
            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div>
                    <h2>Data Table</h2>
                    <table border="2" width=100% class="text-light">
                        <tr class="head">
                            <td>ID</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Address</td>
                            <td>Room Name</td>
                            <td>Room Price</td>
                            <td>Check IN</td>
                            <td>Check Out</td>
                            <td>Adult</td>
                            <td>Children</td>
                            <td>Additional Requests</td>
                        </tr>
                        @foreach ($data as $in)
                            <tr class="head1">
                                <td>{{ $in['id'] }}</td>
                                <td>{{ $in['fname'] }}</td>
                                <td>{{ $in['lname'] }}</td>
                                <td>{{ $in['email'] }}</td>
                                <td>{{ $in['phone'] }}</td>
                                <td>{{ $in['address'] }}</td>
                                <td>{{ $in['room_name'] }}</td>
                                <td>{{ $in['room_price'] }}</td>
                                <td>{{ $in['check_in'] }}</td>
                                <td>{{ $in['check_out'] }}</td>
                                <td>{{ $in['adult'] }}</td>
                                <td>{{ $in['children'] }}</td>
                                <td>{{ $in['additional_requests'] }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <!-- Widgets End -->
@include('footer')