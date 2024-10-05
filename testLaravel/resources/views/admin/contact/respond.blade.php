<!-- resources/views/admin/contact/respond.blade.php -->
@extends('layout.admintemplate')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Respond to {{ $contact->name }}</h1>

    <form action="{{ route('admin.contact.sendResponse', $contact->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="admin_response" class="form-label">Your Response</label>
            <textarea id="admin_response" name="admin_response" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Response</button>
    </form>
</div>
@endsection
