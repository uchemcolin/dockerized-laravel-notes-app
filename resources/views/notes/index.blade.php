@extends('layouts.app')

@section('title', 'My Notes')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="bi bi-sticky"></i> My Notes</h2>
    <a href="{{ route('notes.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Add New Note
    </a>
</div>

@if($notes->isEmpty())
    <div class="text-center py-5">
        <i class="bi bi-journal-text" style="font-size: 4rem; color: #dee2e6;"></i>
        <h3 class="mt-3 text-muted">No notes yet</h3>
        <p class="text-muted">Start by creating your first note!</p>
        <a href="{{ route('notes.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Create Note
        </a>
    </div>
@else
    <div class="row">
        @foreach($notes as $note)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card note-card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ Str::limit($note->title, 50) }}</h5>
                        <p class="card-text text-muted note-body">
                            {{ Str::limit($note->body, 100) }}
                        </p>
                        <small class="text-muted">
                            <i class="bi bi-clock"></i> {{ $note->created_at->diffForHumans() }}
                        </small>
                    </div>
                    <div class="card-footer bg-transparent border-0 d-flex justify-content-between">
                        <div>
                            <a href="{{ route('notes.show', $note) }}" class="btn btn-sm btn-info btn-actions">
                                <i class="bi bi-eye"></i> View
                            </a>
                            <a href="{{ route('notes.edit', $note) }}" class="btn btn-sm btn-warning btn-actions">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                        </div>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST" 
                              onsubmit="return confirm('Are you sure you want to delete this note?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger btn-actions">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
@endsection