@extends('layouts.app')
@section('content')

<div class="container mt-5">
  <div class="card mx-auto shadow p-5" style="max-width: 500px; border-radius: 15px;">
    <div class="card-body">
      <h2 class="card-title text-center text-primary mb-4">Admin Registration</h2>

      <form action="{{ url('/admin/register') }}" method="POST">
        <!-- Replace "process_registration.php" with the actual server-side script handling form submissions -->
          @csrf

          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>


        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>


        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
          <label for="confirm_password">Re-Type Password:</label>
          <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>
         <div class="">
           <br>
         </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
      </form>
    </div>
  </div>
</div>

<!-- Add Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
