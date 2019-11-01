#!/bin/bash

echo "Producing a Major version";

gulp

gulp --production=major || exit 1
