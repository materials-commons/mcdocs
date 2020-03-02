---
title: Workflows
description: Overview of Workflows
extends: _layouts.documentation
section: content
---

# Workflows

A workflow represents the steps you took to get your results. A workflow is constructed using a sample language.  Each 
step in your workflow is separated by a '->'. Conditional steps have names that contain a '?' in them.

```Heat Treatment -> Analyze```
 

When specifying a step you can optionally give a direction in parentheses. When specifying
a conditional step, you can specify the text on the connecting arrow. Below is the code and result for
an example workflow.

Note that the conditional steps have a "yes" or a "no" on their arrows, and that the steps with a "right" in
the parentheses show the next step to their right, as opposed to below their step.


```
        Heat Treat Sample?(yes, right)->Heat Treat at 400c/3h(right)->SEM(right)->Analyze
        Heat Treat Sample?(no)->SEM->Analyze
```

![Example Workflow](/assets/img/workflow-help.png)
