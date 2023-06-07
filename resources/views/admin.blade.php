<style>
    .appointments-table {
        width: 100%;
        border-collapse: collapse;
    }

    .appointments-table th, .appointments-table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ccc;
    }

    .appointments-table th {
        background-color: #f0f0f0;
        font-weight: bold;
    }
</style>
<h1>Appointments</h1>

    <table class="appointments-table">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Appointment</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->phone }}</td>
                    <td>{{ $appointment->appointment }}</td>
                    <td>{{ $appointment->subject }}</td>
                    <td>{{ $appointment->message }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
