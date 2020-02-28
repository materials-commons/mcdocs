---
title: Processes
description: Overview of Processes
extends: _layouts.documentation
section: content
---

# Processes
Processes represent the steps you take in your experiment. Processes operate on Samples and Files. Processes are the
steps you represent in your workflow. An example of a process in a experiment is Annealing. Processes have attributes
that describe things about the process. The Annealing process might have both a Time and a Temperature attribute
associated with it.

![Process Page](/assets/img/processes/process-page.png)

### Settings Tab
The settings tab will show you the process settings. These represent attributes about the process. For example the voltage
setting on a SEM, or time and temperature for Annealing. A setting attribute has a name, description, units and a value.

Because values can be complex you can represent them as simple attributes (egg 400 for temperature) or as complex
objects with multiple attributes.

### Samples Tab
The samples tab shows the samples associated with the process. These can be samples that the process operated on, or
even samples that the process produced. For example if you section a sample then the process that performed the sectioning
can show that it produced new samples from the sectioned sample.

### Files Tab
The files tab shows the files associated with the process. As for samples these can be files that the process
operates on or produces. You can click through to view the underlying file.

### Edit Process
Not implemented

### Delete Process
Not implemented