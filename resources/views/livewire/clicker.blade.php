<div class="container widh-full px-8 py-8">
    <h1>{{ $title }} {{ count($users) }}</h1>

    <input class="border border-black" type="text" name="name" id="name" wire:model="name">
            <input class="border border-black" type="email" name="email" id="email" wire:model="email">
            <input class="border border-black" type="password" name="password" id="password" wire:model="password">

    <div class="bg-yellow-50 py-5">
        <span>
            <button wire:click="createNewUser" type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-black focus:outline-none rounded-lg border border-black hover:bg-red-600
            hover:text-blue-500 focus:z-10 focus:ring-4 focus:ring-red-100">Create
                a new user</button>
        </span>
    </div>
</div>
