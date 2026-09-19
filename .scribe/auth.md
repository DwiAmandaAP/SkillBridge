# Authenticating requests

To authenticate requests, include an **`Authorization`** header with the value **`"Bearer {YOUR_AUTH_TOKEN}"`**.

All authenticated endpoints are marked with a `requires authentication` badge in the documentation below.

Masukkan token Sanctum pada kolom Authorization dengan format <code>Bearer TOKEN</code>. Gunakan token user untuk endpoint user dan token admin untuk endpoint admin.
