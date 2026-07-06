@extends('layouts.app')

@section('title', $note->title)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">{{ $note->title }}</h4>
                <div>
                    <a href="{{ route('notes.edit', $note) }}" class="btn btn-sm btn-warning">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <a href="{{ route('notes.index') }}" class="btn btn-sm btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="note-body">
                    {{ $note->body }}
                </div>
                <hr>
                <div class="text-muted small">
                    <i class="bi bi-clock"></i> Created: {{ $note->created_at->format('M d, Y h:i A') }}
                    @if($note->created_at != $note->updated_at)
                        <br><i class="bi bi-pencil-square"></i> Updated: {{ $note->updated_at->format('M d, Y h:i A') }}
                    @endif
                </div>
            </div>
            <div class="card-footer">
                <form action="{{ route('notes.destroy', $note) }}" method="POST" 
                      onsubmit="return confirm('Are you sure you want to delete this note?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash"></i> Delete Note
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection