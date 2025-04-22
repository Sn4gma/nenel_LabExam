<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $task->title ?? '') }}">
    @error('title') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description', $task->description ?? '') }}</textarea>
    @error('description') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="form-check mb-3">
    <input type="checkbox" name="is_completed" class="form-check-input"
           {{ old('is_completed', $task->is_completed ?? false) ? 'checked' : '' }}>
    <label class="form-check-label" for="is_completed">Completed</label>
</div>
