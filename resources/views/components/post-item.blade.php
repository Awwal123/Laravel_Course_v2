      <div class="flex mb-8 pl-8 border border-default rounded-base shadow-xs">
          <div class="flex-1">
              <a href="#">
                  <h5 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading">{{ $post->title }}</h5>
              </a>
              <div class="mb-6 text-body">{{ Str::words($post->content, 20) }}</div>
              <a href="#"
                 >
                 <x-primary-button>
                  Read more

                 </x-primary-button>
              </a>
          </div>
          <a href="#">
              <img class="rounded-r-lg h-full object-cover w-48" src="https://flowbite.com/docs/images/blog/image-1.jpg"
                  alt="" class="" />
          </a>
      </div>
