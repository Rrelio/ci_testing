<?= view($header)?>
<div class="container">
    <div class="text-center">
        <h2>This is a sample login page</h2>
    </div>
    <hr>
    <form class="mb-3 mx-auto w-50">
        <div class="mb-3">
            <label for="userName" class="form-label">User name:</label>
            <input type="text" class="form-control" id="userName">
        </div>
        <div class="mb-3">
            <label for="userPassword" class="form-label">Password:</label>
            <input type="password" class="form-control" id="userPassword">
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-dark">Login</button>
        </div>
    </form>
</div>
<?= view($footer)?>