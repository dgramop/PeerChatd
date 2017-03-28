<?php
/*
Peer servers hit this URL to request access to user information, allowing users to login from different servers.

They need to provide:
Hash of the user's password (note that passwords are stored as a double-hash, this to prevent a cleartext password to be sent to a potentially lying or malicous server pretending to have a certain user's profile info.
Username (includes the first 4 chars of a SHA-256 of the user's PGP key signature in order to provide enough entropy to prevent similar usernames (and the pgp key signature).

The user is notified through a chat message sent by this server about who hit this URL asking for what, for all attempts, successful and unsuccesful.

Potential responses will include
Success (send everything encrypted with user's private key (except for some settings, which will be sent encrypted with the asking server's private key), send private key encrypted with user's password (which is all we have access to anyways). Also, send signed version of keychain in order to verify public key contacts.
Password Failure (access denied). After 5 incorrect attempts, stop responding with this and respond with
Fuck Off - tells server that its trying too hard and stop accepting or validating any more responses for that specific user for 2 hours. The user's account will lock up if the user sets it to do so, as this could be used to deny service to a user (to keep having his acct. locked up so he can't login on that server, but he can still login on existing peer servers that already have his info)
Waiting for confirmation - if the user wants to login and peronally say yes/no. The external server should reply with a link right after this so the user can approve.
*/
?>
