class CustomSidebar extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <aside class="fixed left-0 top-0 h-full w-64 bg-white shadow-xl p-6">

            <h2 class="text-2xl font-bold mb-8 text-indigo-600">Your's Glow</h2>

            <nav class="space-y-4">
                <a href="/dashboard/home" class="flex items-center text-gray-700 hover:text-indigo-600">
                    <i data-feather="home" class="mr-3"></i> Dashboard
                </a>

                <a href="/dashboard/projects" class="flex items-center text-gray-700 hover:text-indigo-600">
                    <i data-feather="folder" class="mr-3"></i> Projects
                </a>

                <a href="/dashboard/notes" class="flex items-center text-gray-700 hover:text-indigo-600">
                    <i data-feather="file-text" class="mr-3"></i> Notes
                </a>

            </nav>

        </aside>
        `;

        // Load feather icons after adding HTML
        feather.replace();
    }
}

customElements.define('custom-sidebar', CustomSidebar);