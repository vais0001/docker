@section('content')
    <section class="section">
        <div class="container">
            <div class="content">
                <div class="has-text-right">
                    <a href="{{ route('grades.create') }}" class="button is-primary">Add a new grade...</a>
                </div>

                <table>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mark</th>
                        <th>Has cheated</th>
                        <th>Feedback</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($grades as $grade)
                        <tr style="{{ $grade->is_passed() ? 'background-color: green' : '' }}">
                            <td>{{ $grade->id }}</td>
                            <td>{{ $grade->mark }}</td>
                            <td>{{ $grade->has_cheated }}</td>
                            <td>{{ $grade->feedback }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
