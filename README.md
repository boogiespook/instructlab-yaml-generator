# instructlab-yaml-generator

## Overview
If you are new to YAML, this simple webapp will help you creating your first YAML file for [InstructLab](https://github.com/instructlab). YAML is notoriously strict when it come to indentation so this just starts you on your YAML journey!

## Example output
```
---
task_description: |
      A new skill about the Forest of Dean
created_by: boogiespook
seed_examples:
  - question: |
      Where is the Forest of Dean
    answer: |
      The Forest of Dean is in south western
      Gloucestershire 

  - question: |
      Which town is the administrative centre
    answer: |
      The administrative centre of the local authority
      is Coleford

  - question: |
      What well known people come from the Forest of
      Dean?

    answer: |
      The writer of this code is from the Forest of Dean
      :-)

attribution:
    - source: self-authored
      license: Apache-2.0
```

The current version allows you to create 5 questions and answers

## Installation
To build the application locally you can use Podman or Docker.

Firstly, clone this repo to your local host

``` git clone https://github.com/boogiespook/instructlab-yaml-generator.git ```

The cd to the code directory
``` cd instructlab-yaml-generator ```

Followed by 

``` podman build -t instructlab-yaml-generator:latest . ```

Output will look something like this

```
STEP 1/5: FROM registry.access.redhat.com/ubi9/php-81:latest
STEP 2/5: MAINTAINER Chris Jenkins "chrisj@redhat.com"
--> Using cache aada37655cec7a66ff3745bea051aebb3c6dbdf40b1b810335dc3b2f4eadfd0e
--> aada37655cec
STEP 3/5: EXPOSE 8080
--> Using cache c6d215e24d2958f1b50f41693432787afa42468a70d12448ab80ab25f25a7bd5
--> c6d215e24d29
STEP 4/5: COPY . /opt/app-root/src
--> 5b346dfe022b
STEP 5/5: CMD /bin/bash -c 'php -S 0.0.0.0:8080'
COMMIT instructlab-yaml-generator:latest
--> 30c0e0581a70
Successfully tagged localhost/instructlab-yaml-generator:latest
30c0e0581a70d061a5508c3793342685cac50c53805859be2eb2b8b2d4db0e14
```

You can verify this by listing the images on your local machine

```podman images```

and you will get an output something like this

``` localhost/instructlab-yaml-generator    latest      30c0e0581a70  27 seconds ago  927 MB ```

### Running

Once you have the container built you are ready to run the application.

``` podman run -p 8080:8080 localhost/instructlab-yaml-generator ```

If everything is fine you will see a message like this 

``` PHP 8.0.30 Development Server (http://0.0.0.0:8080) started ```

You can then open a browser and type `localhost:8080` to open the main page.
