<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body class="bg-gray-100 min-h-screen flex flex-col items-center py-10">

    <div class="bg-white w-full max-w-4xl p-8 rounded-2xl shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-700">Student List</h2>
            <a href="{{ route('students.create') }}" 
                class="bg-red-500 hover:bg-green-600 text-white px-4 py-2 rounded-sm font-semibold">
                + Create Student
            </a>
        </div>

        <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-gray-50">
                <tr>
                    <th class="text-left px-4 py-2 border-b">#</th>
                    <th class="text-left px-4 py-2 border-b">Name</th>
                    <th class="text-left px-4 py-2 border-b">Age</th>
                    <th class="px-4 py-2 border-b text-center">Actions</th>
                </tr>   
            </thead>
            <tbody>
                @forelse ($students as $index => $student)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border-b">{{ $index + 1 }}</td>
                        <td class="px-4 py-2 border-b">{{ $student->name }}</td>
                        <td class="px-4 py-2 border-b">{{ $student->age }}</td>
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-gray-500 py-4">No students found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>