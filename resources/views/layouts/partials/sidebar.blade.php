<aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-2 space-y-2">
                    <li>
                        <a href="/dashboard"
                            class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <x-icons.dashboard class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" />
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>

                    @can('teacher')
                        <li>
                            <a href="{{ route('language.index') }}"
                                class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                <x-icons.unit class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" />
                                <span class="ml-3">Courses</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('feedback.index') }}"
                                class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                <x-icons.feedback class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" />
                                <span class="ml-3">Feedback</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('student.index') }}"
                                class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                <x-icons.user class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" />
                                <span class="ml-3">Students</span>
                            </a>
                        </li>
                    @endcan

                    @can('admin')
                        <li>
                            <a href="{{ route('teacher.index') }}"
                                class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                <x-icons.user class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" />
                                <span class="ml-3">Teachers</span>
                            </a>
                        </li>
                    @endcan

                    <li>
                        <a href="{{ route('profile.edit') }}"
                            class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <x-icons.gear class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" />
                            <span class="ml-3">Settings</span>
                        </a>
                    </li>
                </ul>
                <div class="pt-2 space-y-2">
                    <a href="/"
                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                        <x-icons.home
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        <span class="ml-3">Home</span>
                    </a>

                    <a href="https://github.com/alleyshairu/uclearncode" target="_blank"
                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                        <x-icons.github
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        <span class="ml-3">GitHub</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</aside>

<div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
