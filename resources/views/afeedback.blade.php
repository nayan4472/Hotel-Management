@include('header')
            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div>
                    <h2>Data Table</h2>
                    <table border="2" width=100% class="text-light">
                        <tr class="head">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Message</td>
                        </tr>
                        @foreach ($data as $in)
                            <tr class="head1">
                                <td>{{ $in->id }}</td>
                                <td>{{ $in->name }}</td>
                                <td>{{ $in->email }}</td>
                                <td>{{ $in->message }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <!-- Widgets End -->
            <!-- Footer Start -->
@include('footer')