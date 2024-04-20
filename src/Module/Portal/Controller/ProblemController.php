<?php

namespace Uc\Module\Portal\Controller;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Uc\Module\Course\Model\ProblemLevel;
use Uc\Module\Course\Request\ProblemStoreRequest;
use Uc\Module\Course\Request\ProblemSearchRequest;
use Uc\Module\Course\Request\ProblemUpdateRequest;

class ProblemController extends PortalController
{
    public function index(Request $request): View
    {
        $languages = $this->languageQuery->all();
        $levels = ProblemLevel::cases();
        $filters = ProblemSearchRequest::fromArray($request->all());
        $problems = $this->problemQuery->filter($filters);

        return $this->view('portal.problem.index', [
            'levels' => $levels,
            'problems' => $problems,
            'filters' => $filters,
            'languages' => $languages,
        ]);
    }

    public function create(string $id): View
    {
        $chapter = $this->chapterQuery->get($id);

        if (null === $chapter) {
            abort(404, 'Chapter not found');
        }

        $levels = ProblemLevel::cases();

        return $this->view('portal.problem.create', [
            'levels' => $levels,
            'chapter' => $chapter,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        /**
         * @var array<string, string>
         */
        $data = $this->validate($request, [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'problem_level_id' => ['required', 'int'],
            'chapter_id' => ['required', 'string'],
        ]);

        $chapter = $this->chapterQuery->get($data['chapter_id']);

        if (null === $chapter) {
            abort(404, 'Chapter not found');
        }

        $req = ProblemStoreRequest::fromArray($chapter, $data);
        $problem = $this->problemService->store($req);

        flash('Problem added!')->success();

        return $this->redirectRoute('portal.problem.edit', ['id' => $problem->id()]);
    }

    public function edit(string $id): View
    {
        $problem = $this->problemQuery->get($id);
        if (null === $problem) {
            abort(404, 'Problem not found');
        }

        $levels = ProblemLevel::cases();

        return $this->view('portal.problem.edit', [
            'levels' => $levels,
            'problem' => $problem,
        ]);
    }

    public function update(string $id, Request $request): RedirectResponse
    {
        /**
         * @var array<string, string>
         */
        $data = $this->validate($request, [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'problem_level_id' => ['required', 'int'],
        ]);

        $problem = $this->problemQuery->get($id);
        if (null === $problem) {
            abort(404, 'Problem not found');
        }

        $req = ProblemUpdateRequest::fromArray($data);
        $this->problemService->update($problem, $req);

        flash('Problem updated!')->success();

        return $this->redirectRoute('portal.problem.edit', ['id' => $problem->id()]);
    }

    public function feedback(string $id, Request $request): View
    {
        $problem = $this->problemQuery->get($id);
        if (null === $problem) {
            abort(404, 'Problem not found');
        }

        $feedbacks = $this->feedbackQuery->byProblem($problem->id());

        return $this->view('portal.problem.feedback', [
            'problem' => $problem,
            'feedbacks' => $feedbacks,
        ]);
    }
}
