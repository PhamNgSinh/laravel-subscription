<div class="table-responsive">
    <table class="table" id="plans-table">
        <thead>
        <tr>
            <th>Title</th>
        <th>Identifier</th>
        <th>Stripe Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($plans as $plan)
            <tr>
                <td>{{ $plan->title }}</td>
            <td>{{ $plan->identifier }}</td>
            <td>{{ $plan->stripe_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['plans.destroy', $plan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('plans.show', [$plan->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('plans.edit', [$plan->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
