<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <h1 style="font-weight:bold">Login to Access the Dashboard</h1>
    <form action="/dashboard/student" method="POST">
        <!-- cross-site request forgery token for security -->
        @csrf  
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
