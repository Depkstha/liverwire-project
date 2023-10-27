<div class="container py-10 mx-auto">
    @if ($success)
      <span class="block mb-4 text-green-500">Post updated Successfully.</span>
    @endif
    <form wire:submit='update' method="POST">
      <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" id="title" wire:model='form.title'
          class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" />
        @error('title')
          <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
        @enderror
      </div>
      <div class="mt-4">
        <label for="body">Body</label>
        <textarea id="body" wire:model='form.body' class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"></textarea>
        @error('body')
          <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
        @enderror
      </div>
      <button
        class="px-4 py-2 mt-4 text-xs tracking-widest text-white uppercase bg-gray-800 rounded-md font-semi-bold hover:bg-gray-700">Save</button>
    </form>
  </div>
