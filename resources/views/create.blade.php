
    <div class="container">
        <h1>Create Employee Schedule</h1>
        <form action="{{ route('employee-schedules.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="employee_id">Employee</label>
                <select name="employee_id" id="employee_id" class="form-control">
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="start_time">Start Time</label>
                <input type="datetime-local" name="start_time" id="start_time" class="form-control">
            </div>
            <div class="form-group">
                <label for="end_time">End Time</label>
                <input type="datetime-local" name="end_time" id="end_time" class="form-control">
            </div>
            <!-- Add other necessary fields -->
            <button type="submit" class="btn btn-primary">Create Schedule</button>
        </form>
    </div>