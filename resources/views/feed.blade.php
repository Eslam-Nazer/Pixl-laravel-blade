<x-layout title="PIXL - Feed">

    @include('partails.navigation')

    <!-- Content -->
    <main class="flex grow flex-col gap-4 overflow-y-auto py-4 sm:px-2">
        <div class="h-full">
            <nav class="scrollbar-none overflow-x-auto">
                <ul class="flex min-w-max justify-end gap-8 text-sm">
                    <li><a class="hover:underline" href="#">For you</a></li>
                    <li>
                        <a
                            class="text-pixl-light/60 hover:text-pixl-light/80 hover:underline"
                            href="#"
                        >Idea streams</a
                        >
                    </li>
                    <li>
                        <a
                            class="text-pixl-light/60 hover:text-pixl-light/80 hover:underline"
                            href="#"
                        >Following</a
                        >
                    </li>
                </ul>
            </nav>
        </div>
        <!--   Post Prompt   -->
        <div
            class="border-pixl-light/10 mt-8 flex items-start gap-4 border-b pb-4"
        >
            <a class="shrink-0" href="/profile">
                <img
                    class="size-10 object-cover"
                    src="/images/adrian.png"
                    alt="Avatar for adrian"
                />
            </a>
            @include('partails.post-form', [
                        'labelText' => 'Post body',
                        'fieldName' => 'post',
                        'placeholder' => "What's up _adrian?"
                    ])
        </div>
        <!-- Feed -->
        <ol class="mt-4">
            @foreach($feedItems as $item)

                <!-- Feed item -->
                @include('partails.feed-item', compact('item'))
            @endforeach
        </ol>

        <!-- Content Footer -->
        <footer class="mt-10 ml-14">
            <p class="text-center">That's all, folks</p>
            <hr class="border-pixl-light/10 my-4"/>
            <!-- White noise -->
            <div class="h-20 bg-[url(/resources/images/white-noise.gif)]"></div>
        </footer>
    </main>

    @include('partails.aside')
</x-layout>
