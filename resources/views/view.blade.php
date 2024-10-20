<form method="GET" action="{{ route('pegi') }}">
    <label for="start_date">Start Date:</label>
    <input type="date" name="start_date" id="start_date" value="{{ request('start_date') }}">

    <label for="end_date">End Date:</label>
    <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}">

    <button type="submit">Filter</button>
</form>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Pagination Links -->
{{ $data->appends(request()->input())->links() }}
