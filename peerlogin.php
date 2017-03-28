<?php
/*
Peer servers hit this URL to request access to user information, allowing users to login from different servers.

They need to provide:
Hash of the user's password (note that passwords are stored as a double-hash, this to prevent a cleartext password to be sent to a potentially lying or malicous server pretending to have a certain user's profile info.
Username (includes the first 4 chars of a SHA-256 of the user's PGP key signature in order to provide enough entropy to prevent similar usernames (and the pgp key signature)

*/
?>
