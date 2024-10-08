@extends('layout.admintemplate')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Respond to {{ $contact->name }}</h4>
            
            <form action="{{ route('admin.contact.respond.store', $contact->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="admin_response" class="form-label">Your Response</label>
                    <textarea id="admin_response" name="admin_response" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Response</button>
                <a href="{{route('admin.contact.index')}}" type="submit" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
