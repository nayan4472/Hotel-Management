@include('header')

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<center>
    <div class="wrapper">
        <form class="form-signin" method="POST" action="/add_room">  
            @csrf     
          <h2 class="form-signin-heading">Add New Rooms</h2>
          <input type="file" class="form-control" name="img_name"  required="" autofocus="" />
          <input type="text" class="form-control" name="room_name" placeholder="Room Name" required="" autofocus="" />
          <input type="text" class="form-control" name="price" placeholder="₹ Price" required=""/>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>   
        </form>
      </div>
</center>

 <!-- Widgets Start -->
 <div class="container-fluid pt-4 px-4">
    <div>
        <h2>Data Table</h2>
        <table border="2" width=100% class="text-light">
            <tr class="head">
                <td>ID</td>
                <td>Image</td>
                <td>Room Name</td>
                <td>Price</td>
                <td>Edit</td>
                <td>Delete</td>


            </tr>
            @foreach ($data as $in)
                <tr class="head1">
                    <td>{{ $in['id'] }}</td>
                    <td><img height="100px" width="180px" src="{{url('user/images/'.$in['img_name'])}}"></td>
                    <td>{{ $in['room_name'] }}</td>
                    <td>{{ $in['price'] }}</td>
                    <td><button><a href="edit_img/{{ $in['id'] }}">Edit</a></button></td>
                    <td><button><a href="delete_img/{{ $in['id'] }}">Delete</a></button></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
<!-- Widgets End -->

@include('footer')