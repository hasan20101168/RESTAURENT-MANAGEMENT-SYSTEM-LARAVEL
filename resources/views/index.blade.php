<style>


.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
</style>
<div class="container text-center">
    <h1 style="color: #007bff;">Chefs Table</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" style="background-color: #f8f9fa;">
                    <thead style="background-color: #007bff; color: white;">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Job Title</th>
                            
                            <th>Salary</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->job_title }}</td>
                                
                                <td>{{ $employee->salary }}</td>
                                <td><a href="{{ route('edit-salary', ['id' => $employee->id]) }}" class="btn btn-primary">Edit Salary</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="{{ route('employee-schedules.index') }}" class="btn btn-primary">Employee Time</a>
    </div>
</div>