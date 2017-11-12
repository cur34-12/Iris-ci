## Git Workflow for Iris Dev Team
Use **Feature Branch Workflow** to provide flexibility for a small development team working in a non-agile environement.

## Feature Branch Workflow
The core idea behind the Feature Branch Workflow is that all feature development should take place in a dedicated branch instead of the master branch. This encapsulation makes it easy for multiple developers to work on a particular feature without disturbing the main codebase. It also means the master branch will never contain broken code. To learn more, see [Atlassian Git Tutorial](https://www.atlassian.com/git/tutorials/comparing-workflows#feature-branch-workflow).

Workflow to follow:

1. Create a branch when starting work on a new feature. Use Trello card number to name your branch. E.g., #101
2. Push feature branch to central repository
3. Commence work on the feature. Edit, stage, commit and push changes to the feature branch
4. On completion of that feature, synchronise your local master with the remote master
5. Merge your feature branch into local master. Resolve conflicts as necessary
6. Run quick tests on updated local master
7. Once you are happy, push updated local master to remote master
8. Delete feature branch


## Best Practices
- Commit often
- Don't commit half-done work
- Write good commit messages
- Short-lived branches
- Delete branches after they are merged 