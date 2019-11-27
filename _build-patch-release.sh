#!/bin/bash

echo "Producing a Patch version";

gulp

gulp --production=patch || exit 1

gulp
