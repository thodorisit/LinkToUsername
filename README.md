# LinkToUsername
Get the username part of a social media link or email.

## Available platforms

### Facebook
##### Usage
```
LinkToUsername::facebook('YOUR-TERM');
```
##### Tests
###### {username} allowed characters "a-z", "A-Z", "0-9", "."
- https://<span>wwww.facebook</span>.com/{username} -> returns {username} 
- https://<span>facebook</span>.com/{username} -> returns {username} 
- ww<span>w.facebook</span>.com/{username} -> returns {username}
- <span>facebook</span>.com/{username} -> returns {username}
- https://<span>wwww.fb</span>.com/{username} -> returns {username}
- https://<span>fb</span>.com/{username} -> returns {username}
- ww<span>w.fb</span>.com/{username} -> returns {username}
- <span>fb</span>.com/{username} -> returns {username}
- https://<span>wwww.fb</span>.me/{username} -> returns {username}
- https://<span>fb</span>.me/{username} -> returns {username}
- ww<span>w.fb</span>.me/{username} -> returns {username}
- <span>fb</span>.me/{username} -> returns {username}
- {username} -> returns {username}
##### If the term ('YOUR-TERM') doesn't follow the rules above, the method returns an error message "error-no-match".

### Instagram
##### Usage
```
LinkToUsername::instagram('YOUR-TERM');
```
##### Tests
###### {username} allowed characters "a-z", "A-Z", "0-9", ".", "_"
- https://<span>w<i></i>ww.<i></i>instagram</span>.com/{username} -> returns {username}
- https://<span>instagram</span>.com/{username} -> returns {username}
- ww<span>w.instagram</span>.com/{username} -> returns {username}
- instagram</span>.com/{username} -> returns {username}
- https://<span>ww<i></i>w.<i></i>instagr</span>.am/{username} -> returns {username}
- https://<span>instagr</span>.am/{username} -> returns {username}
- ww<span>w.instagr</span>.am/{username} -> returns {username}
- instagr</span>.am/{username} -> returns {username}
- @{username} -> returns {username}
- {username} -> returns {username}
##### If the term ('YOUR-TERM') doesn't follow the rules above, the method returns an error message "error-no-match".

### LinkedIn
##### Usage
```
LinkToUsername::linkedin('YOUR-TERM');
```
##### Tests
###### {username} allowed characters "a-z", "A-Z", "0-9", ".", "_", "_"
- https://<span>ww<i></i>w.<i></i>linkedin.</span>com/pub/{username} -> returns {username}
- https://<span>linkedin.</span>com/pub/{username} -> returns {username}
- ww<i></i>w.<span>linkedin.</span>com/pub/{username} -> returns {username}
- linkedin.<span>com/pub/{username} -> returns {username}
- https://<span>ww<i></i>w.<i></i>linkedin.</span>com/in/{username} -> returns {username}
- https://<span>linkedin.</span>com/in/{username} -> returns {username}
- ww<i></i>w.<span>linkedin.</span>com/in/{username} -> returns {username}
- linkedin.<span>com/in/{username} -> returns {username}
- {username} -> returns {username}
##### If the term ('YOUR-TERM') doesn't follow the rules above, the method returns an error message "error-no-match".

### Youtube
##### Usage
```
LinkToUsername::youtube('YOUR-TERM');
```
##### Tests
###### {username} allowed characters "a-z", "A-Z", "0-9", ".", "_", "-"
- https://<i></i>ww<i></i>w<i></i>.youtube.<i></i>com/channel/{username} -> returns {username}
- https://<span>youtube.</span>com/channel/{username} -> returns {username}
- ww<i></i>w.<span>youtube.</span>com/channel/{username} -> returns {username}
- youtube.<span>com/channel/{username} -> returns {username}
- https://<span>w<i></i>ww.<i></i>youtu.</span>be/channel/{username} -> returns {username}
- https://<span>youtu.</span>be/channel/{username} -> returns {username}
- ww<i></i>w.<span>youtu.</span>be/channel/{username} -> returns {username}
- youtu.<span>be/channel/{username} -> returns {username}
- https://<span>ww<i></i>w.<i></i>youtube.</span>com/user/{username} -> returns {username}
- https://<span>youtube.</span>com/user/{username} -> returns {username}
- ww<i></i>w.<span>youtube.</span>com/user/{username} -> returns {username}
- youtube.<span>com/user/{username} -> returns {username}
- https://<span>ww<i></i>w.<i></i>youtu.</span>be/user/{username} -> returns {username}
- https://<span>youtu.</span>be/user/{username} -> returns {username}
- w<i></i>ww.<span>youtu.</span>be/user/{username} -> returns {username}
- youtu<span>.be/user/{username} -> returns {username}
- {username} -> returns {username}
##### If the term ('YOUR-TERM') doesn't follow the rules above, the method returns an error message "error-no-match".
  
### Email
##### Usage
```
LinkToUsername::email('YOUR-TERM');
```
##### Tests
###### {username} allowed characters "a-z", "A-Z", "0-9", ".", "_", "-", "!", "$", "%", "^", "*"
- {username}@website.com -> returns {username}
##### If the term ('YOUR-TERM') doesn't follow the rules above, the method returns an error message "error-no-match".
