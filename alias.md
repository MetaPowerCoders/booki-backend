---
title: ALIAS
layout: template
filename: alias.md
---

### You can simplify with an alias with this command:

```
vim ~/.zshrc
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
:qw
```

enter
```
source ~/.zshrc
```
