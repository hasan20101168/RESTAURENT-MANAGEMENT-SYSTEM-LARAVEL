<div class="container">
    <h1>Edit Employee Salary</h1>

    <form method="POST" action="{{ route('update-salary', ['id' => $employee->id]) }}">
        @csrf
        @method('PUT')

        <!-- Display current salary -->
        <div class="form-group">
            <label for="current_salary">Current Salary:</label>
            <input type="text" id="current_salary" name="current_salary" value="{{ $employee->salary }}">
        </div>

        <!-- Other fields for salary update -->
        <!-- Add additional fields here if needed -->

        <button type="submit" class="btn btn-primary">Update Salary</button>
    </form>
</div>