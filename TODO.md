# TODO

- [x] Update routes/web.php to add GET /user (show form) and POST /user (handle submission).
- [x] Update app/Http/Controllers/UserController.php: split logic into showForm() returning view('user') and submitForm(Request $request) validating and returning a response.

- [ ] Verify routes with: php artisan route:list
- [ ] Smoke test in browser: GET /user shows form; POST /user validates.

