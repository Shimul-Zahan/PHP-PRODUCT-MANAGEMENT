<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Simple PHP Crud Operations</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-indigo-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/products" class="text-white text-lg font-boldsemibold">Product Management</a>
            <div>
                <a href="/products" class="text-white px-4">Home</a>
                <a href="/products" class="text-white px-4">Products</a>
                <a href="/products/create" class="text-white px-4">Create Product</a>
            </div>
        </div>
    </nav>
    <!-- details here -->
    <div class="min-h-[81vh] py-10">
        <div class="relative max-w-4xl py-10 mx-auto block overflow-hidden rounded-lg border border-gray-400 p-4 sm:p-6 lg:p-8">
            <span class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>

            <div class="sm:flex sm:justify-between sm:gap-4">
                <div>
                    <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                        {{$product->name}}
                    </h3>

                    <div class="flex justify-start items-center gap-5">
                        <p class="mt-1 text-xs font-medium text-gray-600">
                            Price: {{$product->price}}$
                        </p>
                        <p class="mt-1 text-xs font-medium text-gray-600">
                            SKU Number: {{$product->sku}}$
                        </p>
                    </div>
                </div>

                <div class="hidden sm:block sm:shrink-0">
                    @if ($product-> image != null)
                    <img width="50" src="{{ asset('uploads/products/'.$product-> image) }}" alt="">
                    @endif
                </div>
            </div>

            <div class="mt-4">
                <p class="text-pretty text-sm text-gray-500 max-w-xl">
                    {{$product->description}}
                </p>
            </div>

            <div class="flex justify-between icon-center">
                <dl class="mt-6 flex gap-4 sm:gap-6">
                    <div class="flex flex-col-reverse">
                        <dt class="text-sm font-medium text-gray-600">Published</dt>
                        <dd class="text-xs text-gray-500">
                            {{\Carbon\Carbon::parse($product->created_at)->format('d M, Y')}}
                        </dd>
                    </div>

                    <div class="flex flex-col-reverse">
                        <dt class="text-sm font-medium text-gray-600">Clicked time</dt>
                        <dd class="text-xs text-gray-500">11 times</dd>
                    </div>
                </dl>
                <button>
                    <a href="{{route('products.cart',$product->id)}}" class="bg-black text-white py-2 px-8 rounded-sm">Add to cart</a>
                </button>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-indigo-600 text-white text-center py-4">
        <p>&copy; 2024 Product Management. All rights reserved.</p>
    </footer>

</body>

</html>