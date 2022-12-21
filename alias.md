---
title: ALIAS
layout: template
filename: alias.md
---

Open a terminal

### You can simplify with an alias with this command:

```
vim ~/.zshrc
```

Add:

```
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

To save and close, write:

```
:qw
```

Enter. To make it work you can enter:
```
source ~/.zshrc
```

Or restart the terminal.
