#!/bin/bash

echo "Releasing latest verion on GitHub";

gulp push-latest || exit 1
