

    <form action='/add_new_user' method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">first name</label>
            <input type="first_name" class="form-control" name='first_name' id="first_name"  placeholder="Enter first name">
        </div>
        <div class="form-group">
            <label for="last_name">last name</label>
            <input type="last_name" class="form-control" name='last_name' id="last_name"  placeholder="Enter first name">
        </div>
        <input type="submit" value="Submit">
    </form>

<a href="/">home</a>