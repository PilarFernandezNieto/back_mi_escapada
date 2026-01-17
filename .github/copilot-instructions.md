# AI Coding Agent Instructions for MiEscapada

## Project Overview
MiEscapada is a full-stack web application with a Laravel 11 backend API and a Vue 3 frontend. The backend uses Laravel Sanctum for SPA authentication, and the frontend communicates via Axios with CSRF protection. The project is currently in its authentication boilerplate stage, with plans for travel/getaway features.

## Architecture
- **Backend**: Laravel 11 API with Sanctum authentication. Routes in `routes/api.php` and `routes/auth.php`.
- **Frontend**: Vue 3 with Vite, Pinia for state management, Vue Router with custom middleware.
- **Authentication**: SPA-style auth using Sanctum CSRF cookies. Auth store in `src/stores/auth.js` handles login, register, logout, password reset.
- **Styling**: Tailwind CSS with Flowbite components.
- **Communication**: Axios instance configured in `src/utils/axios.js` with base URL from `VITE_APP_BACKEND_URL`.

## Key Patterns
- **Router Middleware**: Custom logic in `src/router/index.js` beforeEach for 'auth', 'guest', 'verified', 'is_admin' checks using Pinia auth store.
- **Auth Flow**: Always call `csrf()` before auth requests to get XSRF token. Handle 409 status for email verification.
- **Error Handling**: Validation errors (422) stored in reactive `errors` object in auth store methods.
- **Layouts**: Use `AuthenticatedLayout.vue` for protected pages, `GuestLayout.vue` for public.

## Development Workflows
- **Setup**: Run `composer run setup` in backend to install, copy env, generate key, migrate, npm install/build.
- **Development**: Use `composer run dev` in backend to run server (8000), queue, logs, and frontend Vite (3000) concurrently.
- **Frontend Dev**: `npm run dev` in front_mi_escapada.
- **Build**: `npm run build` in frontend for production.
- **Testing**: Backend uses PHPUnit; run `php artisan test` or `composer test`.

## Conventions
- **File Structure**: Backend follows Laravel conventions. Frontend uses Vue 3 Composition API with `<script setup>`.
- **Environment**: Backend `.env` with `APP_URL=http://localhost:8000`, `FRONTEND_URL=http://localhost:3000`. Frontend `.env` with `VITE_APP_BACKEND_URL=http://localhost:8000`.
- **Imports**: Use absolute imports in frontend (e.g., `../stores/auth`).
- **Components**: Reusable UI in `src/components/`, views in `src/views/`.
- **State**: Pinia stores in `src/stores/`, auth store is central.

## Examples
- **Auth Check in Component**: Use `const auth = useAuthStore()`; check `auth.isLoggedIn`, `auth.user`.
- **API Call**: `await axios.get('/api/user')` for authenticated requests.
- **Route Protection**: Add `meta: { middleware: ['auth'] }` to routes requiring login.

## Dependencies
- Backend: Laravel Framework 11, Sanctum 4.
- Frontend: Vue 3.3, Pinia 2.1, Vue Router 4.2, Axios 1.4, Tailwind 3.3, Vite 4.3.

Focus on extending auth features or adding travel-related models/controllers/views when implementing new features.</content>
<parameter name="filePath">c:\Users\usuario\OneDrive\Escritorio\MiEscapada\back_mi_escapada\.github\copilot-instructions.md