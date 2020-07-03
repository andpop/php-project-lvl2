<?php
namespace Gendiff\Description;

const DOC = <<<DOC
Generate diff

Usage:
  gendiff (-h|--help)
  gendiff (-v|--version)

Options:
  -h --help                     Show this screen
  -v --version                  Show version
DOC;

function showDescription()
{
    $args = \Docopt::handle(DOC, ['version' => "0.1"]);
}

